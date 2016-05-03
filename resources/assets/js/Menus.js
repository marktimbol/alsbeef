import React from 'react';
import ReactDOM from 'react-dom';
import algoliasearch from 'algoliasearch';

import Menu from './components/Menu';
import SearchMenu from './components/SearchMenu';

const client = algoliasearch('CU6OGKCO5Z', '2bd21b775b985f5455ea97e42db5ecc0');
const index = client.initIndex('alsbeef_menus');

const Menus = React.createClass({
	getInitialState() {
		return {
			search: '',
			menus: window.menus,
		}
	},

	handleChange(e) {
		this.setState({
			search: e.target.value
		});
	},

	onSearch(e)
	{
		e.preventDefault();
		index.search(this.state.search, function searchDone(error, result) {
			this.setState({
				menus: result.hits
			});
		}.bind(this));
	},

	componentDidMount() {
		this.enableTypeahead();
	},

	enableTypeahead() {
		$('.typeahead').typeahead({
			minLength: 2,
			highlight: true,
			hint: false,
		}, {
			name: 'menus',
			source: index.ttAdapter(),
			displayKey: 'name',
			templates: {
				notFound() {
					return (
						`
							<div class="Suggestion--no-result">
								<p>No item(s) found.</p>
							</div>
						`
					)
				},

				suggestion(hit) {
					return (
						`
						<div class="Suggestion">
							<div class="Suggestion__figure">
								<img src='/images/menus/bacon.jpg' class="img-responsive" alt=${hit.name} title=${hit.name} />
							</div>

							<div class="Suggestion__content">
								<h3 class="Suggestion__heading">${hit._highlightResult.name.value}</h3>
							</div>
						</div>
						`
					)
				}
			}
		})
		.on('typeahead:select', function(e, suggestion) {
			this.setState({
				search: suggestion.name
			});
		}.bind(this))
	},

	render() {
		let menus = this.state.menus.map((menu) => {
			return (
				<Menu menu={menu} key={menu.id} />
			)
		});

		return (
			<div>
	            <div className="Page__header--bg Parallax__item">
	                <div className="Page__header">  
	                	<SearchMenu handleChange={this.handleChange} onSearch={this.onSearch} />
	                </div>
	            </div>

	            <div className="container-fluid">
	                <div className="row">
	                    <div className="col-md-12">
	                        <h2 className="Page__title">Our Menus</h2>
	                    </div>

	                    <div className="Menus">
	                        { menus }
	                    </div>
	                </div>
	            </div>  
			</div>	
		)
	}
});

ReactDOM.render(
	<Menus />,
	document.getElementById('Menus')
);
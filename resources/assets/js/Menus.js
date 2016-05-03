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
			menus: window.menus,
		}
	},

	handleChange(e) {
		index.search(e.target.value, function searchDone(error, result) {
			this.setState({
				menus: result.hits
			});
		}.bind(this));
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
	                	<SearchMenu handleChange={this.handleChange} />
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
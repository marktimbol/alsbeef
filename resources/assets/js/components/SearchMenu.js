import React from 'react';

const SearchMenu = React.createClass({
    getInitialState() {
        return {
            search: ''
        }
    },

    handleChange(e) {
        this.setState({
            search: e.target.value
        });
    },

    onSubmit(e) {
        e.preventDefault();
        this.props.onSearch(this.state.search);
    },

    onClear() {
        this.setState({
            search: ''
        });
    },

    showSearchButton() {
        return (
            <button onClick={this.onSubmit}>
                <i className="fa fa-search"></i>
            </button>
        );
    },

    showClearButton() {
        return (
            <button onClick={this.onClear}>
                <i className="fa fa-times"></i>
            </button>
        );
    },

	render() {
        let button = 
            this.state.search == '' ?
                this.showSearchButton() :
                this.showClearButton();

		return (
            <div className="form-group">
                <label>What are you looking for?</label>
                <div className="input--with-icon">
                    <input type="text"
                    	className="typeahead form-control input-lg no-radius" 
                        value={this.state.search}
                    	placeholder="Sandwich, Burger, Hot Dogs"
                        onChange={this.handleChange}/>
                        {button}
                </div>
            </div>
		)
	}
});

export default SearchMenu;	                    
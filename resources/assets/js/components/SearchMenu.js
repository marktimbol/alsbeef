import React from 'react';

const SearchMenu = React.createClass({
	render() {
		return (
            <form onSubmit={this.props.onSearch}>
                <div className="form-group">
                    <label>What are you looking for?</label>
                    <div className="input--with-icon">
                        <input type="text"
                        	className="typeahead form-control input-lg" 
                        	placeholder="Sandwich, Burger, Hot Dogs"
                            onChange={this.props.handleChange}/>
                        <button onClick={this.props.onSearch}>
                            <i className="fa fa-search"></i>
                        </button>
                    </div>
                </div>
            </form>
		)
	}
});

export default SearchMenu;	                    
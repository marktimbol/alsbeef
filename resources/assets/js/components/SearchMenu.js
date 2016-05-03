import React from 'react';

const SearchMenu = React.createClass({
	render() {
		return (
            <div className="form-group">
                <label>What are you looking for?</label>
                <div className="input--with-icon">
                    <input type="text"
                    	className="form-control input-lg" 
                    	placeholder="Sandwich, Burger, Hot Dogs"
                        onChange={this.props.handleChange}/>
                    <button>
                        <i className="fa fa-search"></i>
                    </button>
                </div>
            </div>
		)
	}
});

export default SearchMenu;	                    
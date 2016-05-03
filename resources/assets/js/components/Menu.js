import React from 'react';

const Menu = React.createClass({
	render() {
		return (
            <div className="col-md-4 col-xs-12">
                <div className="Card">
                    <a href='#' className="Card__link">
                        <div className="Card__image">
                            <img src="/images/menus/bacon.jpg" alt="" title="" className="img-responsive" />
                        </div>
                        <div className="Card__content">
                            <h3 className="Card__title">{this.props.menu.name}</h3>
                        </div>
                    </a>
                </div>
            </div>
		)
	}
});

export default Menu;
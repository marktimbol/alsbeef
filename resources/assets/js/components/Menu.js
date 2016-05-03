import React from 'react';

const Menu = React.createClass({
	render() {
        let url = `/menus/${this.props.menu.id}`;
		return (
            <div className="col-md-4 col-xs-12">
                <div className="Card">
                    <a href={url} className="Card__link">
                        <div className="Card__image">
                            <img src="/images/menus/bacon.jpg" 
                                alt={this.props.menu.name} 
                                title={this.props.menu.name} 
                                className="img-responsive" />
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
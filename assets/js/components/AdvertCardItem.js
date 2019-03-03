/*
 * Welcome to your app's main JavaScript file!
 *
 * We recommend including the built version of this JavaScript file
 * (and its CSS file) in your base layout (base.html.twig).
 */


// Need jQuery? Install it with "yarn add jquery", then uncomment to require it.
// var $ = require('jquery');

import React from 'react';
import ReactDOM from 'react-dom'

import '../../css/app.css';

export default class AdvertCardItem extends React.Component {
    render() {
        var style = {
            backgroundImage: 'url(' + this.props.details.image + ')',
        };

        return (
            <div>
                <header style={style} className="card-header">
                    <h4 className="card-header--title">{this.props.category}</h4>
                </header>
                <article className="card">
                    <div className="card-body">
                        <p className="date">March 20 2015</p>
                        <h2>{this.props.title}</h2>
                        <p className="body-content">{this.props.text}</p>
                    </div>
                </article>
            </div>
        )
    }
}

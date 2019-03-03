/*
 * Welcome to your app's main JavaScript file!
 *
 * We recommend including the built version of this JavaScript file
 * (and its CSS file) in your base layout (base.html.twig).
 */

// any CSS you require will output into a single css file (app.css in this case)
//require('../css/app.css');
// Need jQuery? Install it with "yarn add jquery", then uncomment to require it.
// var $ = require('jquery');

//$primary: darken(#428bca, 20%);

// the ~ allows you to reference things in node_modules

const $ = require('jquery');
// JS is equivalent to the normal "bootstrap" package
// no need to set this to a variable, just require it
require('bootstrap');

// or you can include specific pieces
// require('bootstrap/js/dist/tooltip');
// require('bootstrap/js/dist/popover');




import React from 'react';
import ReactDOM from 'react-dom'
import AdvertCard from './components/AdvertCard.js';

class App extends React.Component {

	constructor(props) {
		super(props);
		// Don't call this.setState() here!
		this.state = { counter: 0 };
	}

	componentDidMount() {
		console.log({'name': 'componentDidMount()'});
	}

	componentDidUpdate(prevProps) {
		// Typical usage (don't forget to compare props):
		console.log({'name': 'componentDidUpdate()'});
	}

	componentWillUnmount() {
		console.log({'name': 'componentDidUpdate()'});
	}

	shouldComponentUpdate(nextProps, nextState) {
		console.log({'name': 'componentDidUpdate()'});
	}


	render() {
		document.addEventListener('DOMContentLoaded', function() {
			var userRating = document.querySelector('.js-user-rating');
			var isAuthenticated = userRating.dataset.isAuthenticated;
			console.log(isAuthenticated);
		});
		return (
				<AdvertCard />
		)
	}

}

ReactDOM.render(<App/>, document.getElementById('root'));

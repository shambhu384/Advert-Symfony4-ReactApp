
import React from 'react';
import ReactDOM from 'react-dom'
import AdvertCardItem from './AdvertCardItem';

export default class AdvertCard extends React.Component {

    constructor() {
        super();

        this.state = {
            adverts: {}
        }
    }

    componentWillMount() {
        const PostsData =  [
            {
                "category": "News",
                "title": "CNN Acquire BEME",
                "text": "CNN purchased Casey Neistat's Beme app for $25million.",
                "image": "https://source.unsplash.com/user/erondu/600x400"
            },
            {
                "category": "Travel",
                "title": "Nomad Lifestyle",
                "text": "Learn our tips and tricks on living a nomadic lifestyle",
                "image": "https://source.unsplash.com/user/_vickyreyes/600x400"
            },
            {
                "category": "Development",
                "title": "React and the WP-API",
                "text": "The first ever decoupled starter theme for React & the WP-API",
                "image": "https://source.unsplash.com/user/ilyapavlov/600x400"
            },
            {
                "category": "News",
                "title": "CNN Acquire BEME",
                "text": "CNN purchased Casey Neistat's Beme app for $25million.",
                "image": "https://source.unsplash.com/user/erondu/600x400"
            },
            {
                "category": "Travel",
                "title": "Nomad Lifestyle",
                "text": "Learn our tips and tricks on living a nomadic lifestyle",
                "image": "https://source.unsplash.com/user/_vickyreyes/600x400"
            },
            {
                "category": "Development",
                "title": "React and the WP-API",
                "text": "The first ever decoupled starter theme for React & the WP-API",
                "image": "https://source.unsplash.com/user/ilyapavlov/600x400"
            }
        ];
        this.setState({
            adverts: PostsData
        });
    }

	render() {
        return (
            <div className="app-card-list" id="app-card-list">
            {
                Object
                .keys(this.state.adverts)
                .map(key => <AdvertCardItem key={key} index={key} details={this.state.adverts[key]}/>)
            }
            </div>
        )
    }
}

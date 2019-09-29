/**
 * First we will load all of this project's JavaScript dependencies which
 * includes React and other helpers. It's a great starting point while
 * building robust, powerful web applications using React + Laravel.
 */

require('./bootstrap');

/**
 * Next, we will create a fresh React component instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */
// require('./components/App');
import ReactDOM from 'react-dom';
import React, { Component } from 'react'
import { BrowserRouter, Route, Switch } from 'react-router-dom'
import UserRegister from "./components/site/UserRegister";
import Login from "./components/site/login";

class App extends Component {
    render () {
        return (
            <BrowserRouter>
                <Route exact path='/user_register' component={UserRegister} />
                <Route path='/login_user' component={Login} />
            </BrowserRouter>
        )
    }
}
ReactDOM.render(<App />, document.getElementById('app'));


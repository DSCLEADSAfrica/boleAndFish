import React, {Component} from 'react';
import ReactDOM from 'react-dom';
import {Router} from 'react-router';
import routes from './routes';
import {HashRouter} from 'react-router-dom';
import createHistory from "history/createBrowserHistory";



// ReactDOM.render(
//     < Router history={createHistory()} routes={routes} /> ,
//     document.getElementById("app"));

// Inject the generated html into the DOM
ReactDOM.render( < Router history={createHistory()} routes = {routes}/> , document.getElementById('app'));
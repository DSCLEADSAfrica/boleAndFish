import React from 'react';
import {Route} from 'react-router';
import Home from './components/home';
import Register from './components/register';
import Login from './components/login';

const routes = () =>{
    return (
        <Route exact={true} path='/' component={Home}/>,
        <Route path='/login' component={Login}/>,
        <Route path='/register' component={Register}/>
    );
}

export default routes;

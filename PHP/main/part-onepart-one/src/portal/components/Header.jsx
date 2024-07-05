import React from 'react';
import Register from './../../pages/Register';
import { Link } from 'react-router-dom';

const Header = () => {
    return (
        <div className="page-wrapper">
           <header id="header">
  <div className="container-lg">
    <div className="header-left">
      <div className="logo">
        <a href="#"><img src="assets/images/demos-img/logo.png" alt="Molla Logo" /></a>
      </div>
    </div>
    <div className="header-main">
      <ul className="menu">
        <li>
          <a href="#" className="goto-demos">Demos</a>
        </li>
        <li>
          <a href="#" className="goto-features">Features</a>
        </li>
        <li>
          <a href="#" className="goto-elements">Elements</a>
        </li>
        <li>
          <a href="#" className="goto-support">Support</a>
        </li>
      </ul>
    </div>
    <div className="header-right">
      <a className="mobile-menu-toggler mr-0 mr-sm-5"><i className="icon-bars" /></a>
      <a className="btn btn-primary btn-outline"><i className="icon-shopping-cart" />Buy Molla</a>
    </div>
    <div className="header-right"> 
    <button><Link to="/register">Register</Link></button>
    </div>
  </div>
</header>

        </div>
    );
};

export default Header;
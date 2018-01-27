import React, { Component } from 'react';
import { Navbar, NavItem, SideNav, SideNavItem } from 'react-materialize';
// import OrderlyLogo from '../../../img/OrderlyLogo.svg';
import OrderlyLogobw from '../../../img/OrderlyLogobw.svg';
import styles from './Navbar.css';

const Logo = <img id='nav-logo' src={ OrderlyLogobw }/>

class Nav extends Component {
  render() {
    return ( 
      <Navbar brand={Logo} right>
        <NavItem className='active' href='#'>Home</NavItem>
        <NavItem href='#'>Orders</NavItem>
        <NavItem href='#'>Library</NavItem>
        <NavItem href='#'>Log Out, { window.name }</NavItem>
      </Navbar>
    );
  }
}

export default Nav;
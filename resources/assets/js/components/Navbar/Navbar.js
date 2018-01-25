import React, { Component } from 'react';
import { Navbar, NavItem } from 'react-materialize';
import { OrderlyLogo } from '../../../img/OrderlyLogo.svg';

const Logo = <img src={ OrderlyLogo }/>

class Nav extends Component {
  render() {
    return ( 
      <Navbar brand={Logo} right>
        <NavItem className='active' href='#'>Home</NavItem>
        <NavItem href='#'>Orders</NavItem>
        <NavItem href='#'>Library</NavItem>
        <NavItem href='#'>Log Out</NavItem>
      </Navbar>
    );
  }
}

export default Nav;
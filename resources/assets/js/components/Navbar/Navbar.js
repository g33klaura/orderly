import React, { Component } from 'react';
import { Navbar, NavItem, SideNav, SideNavItem } from 'react-materialize';
// import OrderlyLogo from '../../../img/OrderlyLogo.svg';
import OrderlyLogobw from '../../../img/OrderlyLogobw.svg';
import styles from './Navbar.css';

const Logo = <img id='nav-logo' src={ OrderlyLogobw }/>

// const Logout = React.createClass({
//   getDefaultProps: function() {
//     return {
//       route: '/home'
//     };
//   }
// })

class Nav extends Component {

  constructor(props) {
    super(props);
    this.state = {
      logout: '/login'
    };
  }
  

  render() {
    return ( 
      <Navbar brand={ Logo } right>
        <NavItem className='active' href='#'>Home</NavItem>
        <NavItem href='#'>Orders</NavItem>
        <NavItem href='#'>Library</NavItem>
        <NavItem onClick={ this.state.logout } href={ this.state.logout }>Log Out, { window.name }</NavItem>
      </Navbar>
    );
  }
}

export default Nav;
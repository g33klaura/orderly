import React, { Component } from 'react';
import { BrowserRouter as Router, Route } from 'react-router-dom';
import { Link } from 'react-router-dom';
import { Navbar, NavItem, SideNav, SideNavItem, Dropdown } from 'react-materialize';
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

  // constructor(props) {
  //   super(props);
  //   this.state = {
  //     logout: '/login'
  //   };
  // }
  

  render() {
    return (
      <Navbar brand={ Logo } right>
        <NavItem className='active' href='#'>Home</NavItem>
        <NavItem href='#'>Orders</NavItem>
        <NavItem href='#'>Library</NavItem>
        {/*<NavItem onClick={ this.state.logout } href={ this.state.logout }>Log Out, { window.name }</NavItem>*/}
        {/*<NavItem componentClass={ Link } href='/home' to='/home' >Welcome, { window.name }</NavItem>*/}
        <Dropdown belowOrigin={true} trigger={
          <NavItem >Welcome, { window.name }</NavItem>
        } >
        <NavItem divider />
        <NavItem componentClass={ Link } href='/home' to='/home' >Account</NavItem>
        </Dropdown>
      </Navbar>
    );
  }
}

export default Nav;
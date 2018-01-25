import React, { Component } from 'react';
import ReactDOM from 'react-dom';
import PropTypes from 'prop-types';
import { Container, Row, Col, Table, Card } from 'react-materialize';
import ReactDataGrid from 'react-data-grid';
import Navbar from './Navbar/Navbar';
import Products from './ProductsLibrary/Products';
import '../../css/Main.css';

export default class Main extends Component {
  constructor(props) {
    super(props);

  }

  componentWillMount() {

  }

  componentDidMount() {

  }

  componentWillReceiveProps(nextProps) {

  }

  shouldComponentUpdate(nextProps, nextState) {

  }

  componentWillUpdate(nextProps, nextState) {

  }

  componentDidUpdate(prevProps, prevState) {

  }

  componentWillUnmount() {

  }

  render() {
    return (
      <Container>
      
        <h1>Drumroll please...</h1>
        <Navbar />
        <Products />
      
      </Container>
    );
  }
}

Main.propTypes = {

};

// export default Main;

if (document.getElementById('root')) {
  ReactDOM.render(<Main />, document.getElementById('root'));
}

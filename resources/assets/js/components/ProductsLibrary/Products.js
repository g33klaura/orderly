import React, { Component } from 'react';
import PropTypes from 'prop-types';
import { Container, Row, Col, Table, Card } from 'react-materialize';
import styles from './Products.css';

class Products extends Component {
  constructor() {
    super();
    this.state = {
      products: [],
    }
  }

  // componentWillMount() {

  // }

  componentDidMount() {
    /* fetch API in action */
    fetch('/api/products/', {
      method: 'GET'
    })
      .then(response => {
        return response.json();
      })
      .then(products => {
        //Fetched blanks is stored in the state
        this.setState({ products });
      });
  }

  // componentWillReceiveProps(nextProps) {

  // }

  // shouldComponentUpdate(nextProps, nextState) {

  // }

  // componentWillUpdate(nextProps, nextState) {

  // }

  // componentDidUpdate(prevProps, prevState) {

  // }

  // componentWillUnmount() {

  // }

  renderProducts() {
    return this.state.products.map(product => {
      return (
        <tr key={product.id}>
          <td>{product.id}</td>
          <td>{product.product_name}</td>
          <td>{product.blank_name}</td>
        </tr>
      );
    })
  }

  render() {
    return (
        <Container>
        <meta name="csrf-token" content="{{ csrf_token() }}"></meta>
          <Row>
            <Col s={12}>
              
                <Table className='material-table'>
                  <thead>
                    <tr>
                      <th>ID</th>
                      <th>Name</th>
                      <th>Blank</th>
                    </tr>
                  </thead>
                  <tbody>
                      { this.renderProducts() }
                  </tbody>
                </Table>
              
            </Col>
          </Row>
        </Container>
    );
  }
}

// Products.propTypes = {

// };

export default Products;
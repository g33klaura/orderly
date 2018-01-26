import React, { Component } from 'react';
import PropTypes from 'prop-types';
import { Container, Row, Col, Table, Card } from 'react-materialize';
import styles from './Products.css';

class Products extends Component {
  constructor(props) {
    super(props);
    this.state = {
      products: [],
    }
  }

  componentWillMount() {
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

  renderProducts() {
    return this.state.products.map(product => {
      return (
        <tr key={product.id}>
          <td className='id-column'>{product.id}</td>
          <td>{product.product_name}</td>
          <td>{product.blank_name}</td>
          <td>{product.blank_color}</td>
        </tr>
      );
    })
  }

  render() {
    return (
      <Row>
        <Col s={12}>
          
          <Table className='material-table'>
            <thead>
              <tr>
                <th className='id-column'>ID</th>
                <th>Name</th>
                <th>Blank</th>
                <th>Blank Color</th>
              </tr>
            </thead>
            <tbody>
                { this.renderProducts() }
            </tbody>
          </Table>
          
        </Col>
      </Row>
    );
  }
}

// Products.propTypes = {

// };

export default Products;
import React, { Component } from 'react';
import ReactDOM from 'react-dom';
import { Container, Row, Col, Table, Card } from 'react-materialize';
import ReactDataGrid from 'react-data-grid';
import Export from './ExportPDF';

export default class Example extends Component {
    constructor() {

        super();
        //Initialize the state in the constructor
        this.state = {
            blanks: [],
        }
    }
      /*componentDidMount() is a lifecycle method
       * that gets called after the component is rendered
       */
    componentDidMount() {
        /* fetch API in action */
        fetch('/api/blanks/')
            .then(response => {
                return response.json();
            })
            .then(blanks => {
                //Fetched blanks is stored in the state
                this.setState({ blanks });
            });
    }
    
    renderBlanks() {
        return this.state.blanks.map(blank => {
            return (
                /* When using list you need to specify a key
                 * attribute that is unique for each list item
                */
                // <li key={blank.id} >
                //     { blank.blank_name } 
                // </li>  
                <tr key={blank.id}>
                    <td>{blank.blank_type}</td>
                    <td>{blank.blank_name}</td>
                    <td>{blank.blank_color}</td>
                </tr>
            );
        })
    }
    
    
    render() {
        return (
            <Container>
                <Row>
                    <Col s={12}>
                    
                        <h1>I'm in Materialize!</h1>
                    </Col>
                </Row>
                <Row>
                    <Col s={12}>
                        {/*<ul>
                            { this.renderBlanks() }
                        </ul>*/}
                        <div className='card material-table'>
                        {/*<Card>*/}
                            <Table>
                                <thead>
                                    <tr>
                                        <th>Type</th>
                                        <th>Name</th>
                                        <th>Color</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    { this.renderBlanks() }
                                </tbody>
                            </Table>
                        {/*</Card>*/}
                        </div>
                    </Col>
                </Row>
            </Container>
        );
    }
}

if (document.getElementById('example')) {
    ReactDOM.render(<Example />, document.getElementById('example'));
}

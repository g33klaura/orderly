import React, { Component } from 'react';
import ReactDOM from 'react-dom';
import { Container, Row, Col } from 'react-materialize';

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
                <li key={blank.id} >
                    { blank.blank_name } 
                </li>      
            );
        })
    }
    
    
    render() {
        return (
            // <div className="container">
            //     <div className="row">
            //         <div className="col-md-8 col-md-offset-2">
            //             <div className="panel panel-default">
            //                 <div className="panel-heading">Example Component</div>

            //                 <div className="panel-body">
            //                     I'm an example component!
            //                 </div>
            //             </div>
            //         </div>
            //     </div>
            // </div>

            <Container>
                <Row>
                    <Col s={12}>
                        <h1>I'm in Materialize!</h1>
                        <ul>
                            { this.renderBlanks() }
                        </ul> 
                    </Col>
                </Row>
            </Container>
        );
    }
}

if (document.getElementById('example')) {
    ReactDOM.render(<Example />, document.getElementById('example'));
}

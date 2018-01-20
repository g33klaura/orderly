import React, { Component } from 'react';
import ReactDOM from 'react-dom';
import { Container, Row, Col } from 'react-materialize';

export default class Example extends Component {
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
                    </Col>
                </Row>
            </Container>
        );
    }
}

if (document.getElementById('example')) {
    ReactDOM.render(<Example />, document.getElementById('example'));
}

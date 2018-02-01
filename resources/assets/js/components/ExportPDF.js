import React, {Component, PropTypes} from 'react';
import ReactDOM from 'react-dom';
import html2canvas from 'html2canvas';
import jsPDF from 'jspdf';
// import Products from './ProductsLibrary/Products';

export default class Export extends Component {
  constructor(props) {
    super(props);
    // this.printDocument = this.printDocument.bind(this);
  }

    // printDocument() {
      // const input = (document.getElementById('divToPrint'), {
      //   allowTaint:true,
      //   logging: true,
      //   tainTest: false,
      //   useCORS:true
      // });

    //   html2canvas(document.body, {
    //     useCORS: true,
    //     allowTaint:true,
    //     logging: true,
    //     // tainTest: false,
        
    //   })
    //   // html2canvas(input)
    //     .then((canvas) => {
    //       canvas.crossOrigin = "anonymous";
    //       document.body.appendChild(canvas);
    //       const imgData = canvas.toDataURL('image/png');
    //       console.log(imgData);
    //       // const pdf = new jsPDF();
    //       // pdf.addImage(imgData, 'JPEG', 0, 0);
    //       // // pdf.output('dataurlnewwindow');
    //       // pdf.save("download.pdf");
    //     })
    //     .catch(function (error) {
    //       console.error('oops, something went wrong!', error);
    //   });
    //   // ;
    // }

    toB64() {
      var b64;
      html2canvas(document.getElementById('divToPrint'), {useCORS: true}).then(function (canvas) {
        try {
          b64 = canvas.toDataURL("image/png");
        } catch (err) {
          console.log(err)
          alert(err)
        }
        document.getElementById('b-pre').innerText = b64;
        document.getElementById('b-img').src = b64;
      }).catch(function onRejected(error) {
      });
    }
    // document.getElementById('btn').addEventListener('click',toB64);


  render() {
    return (
      <div>
        <div className="mb5" >
          <button onClick={ this.toB64 }>Print</button>
        </div>
        <div id="divToPrint" className="mt4" ref={input => this.input = input}>
          <div>Note: Here the dimensions of div are same as A4</div> 
          <div>You Can add any component here</div>
          <div>
          </div>
        </div>
        <div id="result">
          Result:
          <img id="b-img"/>
          <p id="b-pre"></p>
        </div>
      </div>
    ); 
  }
}

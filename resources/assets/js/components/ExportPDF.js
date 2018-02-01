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

    printDocument() {
      // const input = (document.body, {
      //   allowTaint:true,
      //   logging: true,
      //   tainTest: false,
      //   useCORS:true
      // });
      // const input = (document.getElementById('divToPrint'), {
      //   allowTaint:true,
      //   logging: true,
      //   tainTest: false,
      //   useCORS:true
      // });

      html2canvas(document.body, {
        useCORS: true,
        allowTaint:true,
        logging: true,
        // tainTest: false,
        
      })
      // html2canvas(input)
        .then((canvas) => {
          canvas.crossOrigin = "anonymous";
          document.body.appendChild(canvas);
          const imgData = canvas.toDataURL('image/png');
          console.log(imgData);
          // const pdf = new jsPDF();
          // pdf.addImage(imgData, 'JPEG', 0, 0);
          // // pdf.output('dataurlnewwindow');
          // pdf.save("download.pdf");
        })
        .catch(function (error) {
          console.error('oops, something went wrong!', error);
      });
      // ;
    }

  render() {
    return (
      <div>
        <div className="mb5" >
          <button onClick={ this.printDocument }>Print</button>
        </div>
        <div id="divToPrint" className="mt4" ref={input => this.input = input}>
          <div>Note: Here the dimensions of div are same as A4</div> 
          <div>You Can add any component here</div>
          <div>
          </div>
        </div>
      </div>
    ); 
  }
}

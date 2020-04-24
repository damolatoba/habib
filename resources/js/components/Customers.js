import axios from 'axios'
    import React, { Component } from 'react'
    import ReactDOM from 'react-dom';
    import Footer from './Footer'
    import logoimage from '../../../public/images/Logo.png'
    import Probutton from '../../../public/images/Probutton.png'
    import { Link } from 'react-router-dom'
    import { MdLocationOn } from 'react-icons/md'
    // import { Button } from 'react-bootstrap';

    class Customers extends Component {
      constructor (props) {
        super(props)
        this.state = {
            name:' ',
            mobile:' ',
            address:' ',
        }
        this.handleInputChange = this.handleInputChange.bind(this);
        this.handleFormSubmit = this.handleFormSubmit.bind(this);
      }

      componentDidMount () {
        var customerName = JSON.parse(localStorage.getItem('customerName'));
        var customerMobile = JSON.parse(localStorage.getItem('customerMobile'));
        var customerAddress = JSON.parse(localStorage.getItem('customerAddress'));
          this.setState({
            name:customerName,
            mobile:customerMobile,
            address:customerAddress,
          })
      }

      handleInputChange(event) {
        const value = event.target.value;
        const name = event.target.name;
        this.setState({
           [name]: value
        });
     }

     handleFormSubmit(event) {
        // console.log(this.state.name);
        localStorage.setItem('customerName', JSON.stringify(this.state.name));
        localStorage.setItem('customerMobile', JSON.stringify(this.state.mobile));
        localStorage.setItem('customerAddress', JSON.stringify(this.state.address));
        event.preventDefault();
        this.props.history.push("/Confirm") 
     }
   


      render () {
            return (
                <div className="start">
                  <div className="bgHeader">
      
                  </div>
                  <div className="cusBody">
                  <Link to="/"><img src={logoimage} className="cusLogo"/></Link>
                  <div className="cusForm">
                      <p className="deltit"><span className="loclogo"><MdLocationOn /></span> ENTER DELIVERY INFORMATION</p>
                      <form onSubmit={this.handleFormSubmit}>
                          <input type="text" name="name" placeholder="RECEIVER'S NAME" value={this.state.name ? this.state.name : ''} onChange={this.handleInputChange}/>
                          {/* {this.state.errormessage} */}
                          <input type="text" name="mobile" placeholder="RECEIVER'S PHONE" value={this.state.mobile ? this.state.mobile : ''} onChange={this.handleInputChange}/>
                          <input type="text" name="address" placeholder="RECEIVER'S ADDRESS" value={this.state.address ? this.state.address : ''} onChange={this.handleInputChange}/>
                          <input type="image" src={Probutton} className="probb"/>

                      </form>
                  </div>
                  
                  </div>
                        
                  <Footer />
                </div>
                
              )
      }
    }

    export default Customers
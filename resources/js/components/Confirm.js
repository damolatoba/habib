import axios from 'axios'
    import React, { Component } from 'react'
    import ReactDOM from 'react-dom';
    import Footer from './Footer'
    import logoimage from '../../../public/images/Logo.png'
    import Conbut from '../../../public/images/paybutton.png'
    import { Link } from 'react-router-dom'
    import { MdLocationOn } from 'react-icons/md'
    import { Container, Row, Col } from 'react-bootstrap';
    import NumberFormat from 'react-number-format';
    // import { Button } from 'react-bootstrap';

    class Confirm extends Component {
      constructor (props) {
        super(props)
        this.state = {
            name:' ',
            mobile:' ',
            address:' ',
            cart: [],
            totalcost: 0,
            deliveryfee: 300
        }
      }

      componentDidMount () {
        var customerName = JSON.parse(localStorage.getItem('customerName'));
        var customerMobile = JSON.parse(localStorage.getItem('customerMobile'));
        var customerAddress = JSON.parse(localStorage.getItem('customerAddress'));
        var filledCart = JSON.parse(localStorage.getItem('filledCart'));
        var totcost = 0
        for (var i=0; i<filledCart.length; i++) {
          totcost += filledCart[i].product_prize*filledCart[i].units;
        }
          this.setState({
            name:customerName,
            mobile:customerMobile,
            address:customerAddress,
            cart: filledCart,
            totalcost: totcost
          })
      }
   


      render () {
        const { cart } = this.state
            return (
                <div className="start">
                  <div className="bgHeader2">
      
                  </div>
                  <div className="cusBody">
                  <Link to="/"><img src={logoimage} className="cusLogo"/></Link>
                  <div className="cusForm">
                    <p className="deltit"><span className="loclogo"><MdLocationOn /></span> CONFIRM DELIVERY</p>
                    <Container fluid="xs">
                        <Row>
                            <Col>
                                <span className="recpur">RECEIVER</span>
                                <hr className="hrline5"/>
                                <span className="conname">{this.state.name}</span><br/>
                                <span className="coninf">{this.state.mobile}</span><br/>
                                <span className="coninf">{this.state.address}</span>
                            </Col>
                            <Col>
                                <span className="recpur">PURCHASE</span>
                                <hr className="hrline5"/>
                                {cart.map(c => (
                                  <div key={c.id} className="conprodall">
                                      <span className="conprod">{c.product_name}</span><br/>
                                      <span className="prodqp">Quantity: {c.units}</span>
                                      <span className="conprice"><NumberFormat value={c.units * c.product_prize} displayType={'text'} thousandSeparator={true} prefix={'	\u20A6'} /></span>
                                  </div>
                                ))}
                                <hr className="hrline5"/>
                                    <span className="prodqp2">Sub-Total</span>
                                    <span className="conprice2"><NumberFormat value={this.state.totalcost} displayType={'text'} thousandSeparator={true} prefix={'	\u20A6'} /></span><br/>
                                    <span className="prodqp2">Delivery</span>
                                    <span className="conprice2"><NumberFormat value={this.state.deliveryfee} displayType={'text'} thousandSeparator={true} prefix={'	\u20A6'} /></span>
                                <hr className="hrline5"/>
                                    <span className="prodqp2">Total</span>
                                    <span className="conprice2"><NumberFormat value={this.state.deliveryfee + this.state.totalcost} displayType={'text'} thousandSeparator={true} prefix={'	\u20A6'} /></span>
                            </Col>
                        </Row>
                    </Container>
                    <Link to="/"><img src={Conbut} className="conbut"/></Link >  
                  </div>
                  
                  </div>
                        
                  <Footer />
                </div>
                
              )
      }
    }

    export default Confirm
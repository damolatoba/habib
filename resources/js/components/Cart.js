    import React, { Component } from 'react'
    import { Link } from 'react-router-dom'
    import { TiShoppingCart } from 'react-icons/ti';
    import { IoMdAddCircleOutline, IoIosArrowBack } from 'react-icons/io';
    import { FiMinusCircle } from 'react-icons/fi';
    import { MdDeleteForever } from 'react-icons/md';
    import Footer from './Footer'
    import { Container, Row, Col, Button } from 'react-bootstrap';
    import NumberFormat from 'react-number-format';


    class Cart extends Component {
      constructor (props) {
        super(props)
        this.state = {
            cart: [],
            totalcost: 0,
        }
      }

      componentDidMount () {
        var filledCart = JSON.parse(localStorage.getItem('filledCart'));
        var tot = 0
        var totcost = 0
        for (var i=0; i<filledCart.length; i++) {
          tot += filledCart[i].units;
          totcost += filledCart[i].product_prize*filledCart[i].units;
        }

        this.setState({
            cart: filledCart,
            totalcost: totcost
          })
      }

      componentDidUpdate () {
        localStorage.setItem('filledCart', JSON.stringify(this.state.cart));
      }

      subunit(id){
        var totcost = 0
        const existingProductIndex = this.state.cart.findIndex(p => p.id === id.id);
        const cartProducts = this.state.cart.slice();
        const existingProduct = cartProducts[existingProductIndex];
        const remunit = existingProduct.units
        if(remunit > 1){
            const updatedUnitsProduct = {
                ...existingProduct,
                units: existingProduct.units - 1
              };
      
              cartProducts[existingProductIndex] = updatedUnitsProduct;
              for (var i=0; i<cartProducts.length; i++) {
                totcost += cartProducts[i].product_prize*cartProducts[i].units;
              }
    
              this.setState({
                cart: cartProducts,
                totalcost: totcost
              });
        }else{
            cartProducts.splice(existingProductIndex, 1);
            for (var i=0; i<cartProducts.length; i++) {
                totcost += cartProducts[i].product_prize*cartProducts[i].units;
              }
            this.setState({
                cart: cartProducts,
                totalcost: totcost
            });
        }
      }

      addunit(id){
        var totcost = 0
        const existingProductIndex = this.state.cart.findIndex(p => p.id === id.id);
        const cartProducts = this.state.cart.slice();
        const existingProduct = cartProducts[existingProductIndex];
            const updatedUnitsProduct = {
                ...existingProduct,
                units: existingProduct.units + 1
              };
      
              cartProducts[existingProductIndex] = updatedUnitsProduct;
              for (var i=0; i<cartProducts.length; i++) {
                totcost += cartProducts[i].product_prize*cartProducts[i].units;
              }
    
              this.setState({
                cart: cartProducts,
                totalcost: totcost
              });
      }

      removeprod(id){
        var totcost = 0
        const existingProductIndex = this.state.cart.findIndex(p => p.id === id.id);
        const cartProducts = this.state.cart.slice();
        cartProducts.splice(existingProductIndex, 1);
        for (var i=0; i<cartProducts.length; i++) {
            // tot += cartProducts[i].units;
            totcost += cartProducts[i].product_prize*cartProducts[i].units;
          }
            this.setState({
                cart: cartProducts,
                totalcost: totcost
              });
      }

      emptycart(){
          this.setState({
            cart: [],
            totalcost: 0
          });
      }

      redirectToCustomers(){
        this.props.history.push("/Customers") 
      }
      

      render () {
       
        const { cart } = this.state
        const { totalcost } = this.state 
        return (
                  <div className="start">
                    <div className="headpart">
                      <Container fluid="xs">
                        <Row>
                            <Col><h5 className="prodTitle"><IoIosArrowBack/>HABIB<span className="deliver">DELIVERY</span></h5></Col>
                            <Col><Link to="/products"><h5 className="cartlogo2">Continue Shopping <span className="cartSize"><TiShoppingCart /></span></h5></Link></Col>
                        </Row>
                      </Container> 
                      <hr className="hrline"/>
                    </div>


                    <div className="bodypart">


                    <div className="cartCont">
                      <span className="prodTitle">MY CART</span>
                        {cart.map(c => (
                          <div key={c.id} className="prodInCart">
                          <Container fluid="xs" className="cont">
                            <Row>
                              <Col xs={4}>
                                <img src={`/uploads/images/${c.product_image}`} className="itemImg"/>
                              </Col>
                              <Col xs={8}>
                              <span className="itemSize">{c.product_name}</span><br/>
                              <span className="itemDesc">{c.description}</span><br/>
                              <span className="itemPrice">
                                <NumberFormat value={c.product_prize} displayType={'text'} thousandSeparator={true} prefix={'	\u20A6 '} />
                              </span>
                              </Col>
                            </Row>
                            <hr className="hrline3"/>
                            <Row>
                              <Col className="deldiv"><span onClick={() => this.removeprod({id: c.id})} className="delProd"><span className="delbut"><MdDeleteForever /></span> Remove</span></Col>
                              <Col className="deldiv2">
                              <span className="itemCount"><span onClick={() => this.subunit({id: c.id})} className="subProd"><FiMinusCircle /></span>
                                    &nbsp; &nbsp; <span className="eachUnit"> {c.units} </span> &nbsp; &nbsp;
                                  <span onClick={() => this.addunit({id: c.id})} className="addProd"><IoMdAddCircleOutline /></span></span>
                              </Col>
                            </Row>
                          </Container>
                          </div>
                        ))}
                      </div>
                      <div className="totpart">
                          <span className="tottitle">Total: </span>
                          <span className="amount"><NumberFormat value={totalcost} displayType={'text'} thousandSeparator={true} prefix={'	\u20A6 '} /></span><br/>
                          <p className="shipinf">Shipping fees not included yet</p> <br/>
                          <Button variant="success" className="butsize" onClick={() => this.redirectToCustomers()}>CHECKOUT</Button>
                          <Button variant="warning" className="butsize" onClick={() => this.emptycart()}>CANCEL ORDER</Button>
                      </div>
                      </div>
                      <Footer />
                  </div>
        )
      }
    }

    export default Cart
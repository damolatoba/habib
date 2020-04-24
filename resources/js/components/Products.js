import axios from 'axios'
    import React, { Component } from 'react'
    import { Link } from 'react-router-dom'
    import Product from "./Product";
    import { TiShoppingCart } from 'react-icons/ti';
    import { IoIosArrowBack } from 'react-icons/io';
    import Footer from './Footer'
    import { Container, Row, Col } from 'react-bootstrap';
    import Button1 from '../../../public/images/Button1.png'
    import Button2 from '../../../public/images/Button2.png'

    class Products extends Component {
      constructor () {
        super()
        this.state = {
        products: [],
        cart: [],
        totcart: 0,
        branchInfo: [
          {
            name:'',
            id:''
          }
        ]
        }
      }

      componentDidMount () {

        axios.get('/api/products').then(response => {
          this.setState({
            products: response.data
          })
        })

          const filledCart = JSON.parse(localStorage.getItem('filledCart'));
          if(filledCart !== null){
            var tot = 0
              for (var i=0; i<filledCart.length; i++) {
              tot += filledCart[i].units;
              }
              this.setState({
                cart: filledCart,
                totcart: tot,
              })
          }
      }

      componentDidUpdate () {
        localStorage.setItem('filledCart', JSON.stringify(this.state.cart));
        localStorage.setItem('branchInfo', JSON.stringify(this.state.branchInfo));
      }

      handleAddFunc(product) {
        const existingProductIndex = this.state.cart.findIndex(p => p.id === product.id);
    
        if (existingProductIndex >= 0) {
    
            const cartProducts = this.state.cart.slice();
    
            const existingProduct = cartProducts[existingProductIndex];
    
            const updatedUnitsProduct = {
              ...existingProduct,
              units: existingProduct.units + product.units
            };
    
            cartProducts[existingProductIndex] = updatedUnitsProduct;
    
            this.setState({
              cart: cartProducts,
              totcart: this.state.totcart+product.units
            });
    
        } else {
          this.setState({
            cart: [...this.state.cart, product],
            totcart: this.state.totcart+product.units
          });
        }
      }
      

      render () {
        console.log(this.state.branchInfo)
        const { products } = this.state;
        const { cart } = this.state;
        const { totcart } = this.state;
        return (
          <div className="start">
              <div className="headpart">
                  <Container fluid="xs">
                    <Row>
                        <Col xs={9}><h5 className="prodTitle"><IoIosArrowBack/>HABIB<span className="deliver">DELIVERY</span></h5></Col>
                        <Col><Link to="/cart"><h5 className="cartlogo"><TiShoppingCart /><span className="totProd">{totcart}</span></h5></Link></Col>
                    </Row>
                  </Container> 
                      <hr className="hrline"/>
              </div>
              <div className="bodypart">
                  <div className="mainProdBody">
                        <Row>
                            <Col><Link to="/products"><img src={Button1} className="specbut"/></Link></Col>
                            <Col><Link to="/specials"><img src={Button2} className="specbut"/></Link></Col>
                        </Row>
                        <div className="hbprods">
                                {
                                  products.map(p => <Product key={p.id} {...p} addFunc={this.handleAddFunc.bind(this)} /> )
                                }
                        </div>
                  </div>
              </div>
              <Footer />
          </div>
        )
      }
    }

    export default Products
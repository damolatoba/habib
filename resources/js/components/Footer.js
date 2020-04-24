import React from 'react';
import { Container, Row, Col } from 'react-bootstrap';
import Home from '../../../public/images/Home.png'
import Order from '../../../public/images/Order.png'
import Rewards from '../../../public/images/Rewards.png'
import { Link } from 'react-router-dom'

const Footer = () => {

  return (
    <div id='footer'>
      <Container>
        <Row>
            <Col><Link to="/"><img src={Home} className="footimg"/></Link></Col>
            <Col><Link to="/products"><img src={Order} className="footimg"/></Link></Col>
            <Col><Link to="/"><img src={Rewards} className="footimg"/></Link></Col>
          </Row>
      </Container>
    </div>
    
  );
};

export default Footer;
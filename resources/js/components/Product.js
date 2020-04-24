import React from 'react';
import NumberFormat from 'react-number-format';
import { Container, Row, Col } from 'react-bootstrap';
import { IoMdAddCircle } from 'react-icons/io';

const Product = ({id, product_name, description, product_image, product_prize, product_size, addFunc }) => {

  return (
      <div className="eachprod" id={id}>
          <div className="prodItem">
          <img src={`/uploads/images/${product_image}`} className="itemImg"/>
              <div className="itemInfo">
                  <p className="itemSize">{product_name}</p>
                  <span className="itemDesc">{description}</span>
                  <Container fluid="xs" className="prizeRow">
                    <Row>
                        <Col xs={8}>
                          <p className="itemPrice">
                            <NumberFormat value={product_prize} displayType={'text'} thousandSeparator={true} prefix={'	\u20A6'} />
                          </p>
                        </Col>
                        <Col xs={4}>
                          {/* <button className=""
                          onClick={() => addFunc({id, product_name, description, product_image, product_prize, units: 1})}
                          >Add</button> */}
                          <p onClick={() => addFunc({id, product_name, description, product_image, product_prize, units: 1})} className="addToCart"><IoMdAddCircle /></p>
                        </Col>
                    </Row>
                  </Container> 
              </div>
          </div>
      </div>
  );
};

export default Product;
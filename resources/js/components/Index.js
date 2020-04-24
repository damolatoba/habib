    import React, { Component } from 'react'
    import logoimage from '../../../public/images/Logo.png'
    import Buttonimage from '../../../public/images/Button.png'
    import { Link } from 'react-router-dom'

    class Index extends Component {
      constructor (props) {
        super(props)
        // console.log(branches);
      }

      render () {
        return (
          <div className="indexMain">
              <div className="indexUpper">

              </div>
              <div className="indexLower">
                  <img src={logoimage} className="logoimage"/><br/>
                  <Link to="/branches"><img src={Buttonimage} className="butimg"/></Link >
              </div>
          </div>
        )
      }
    }

    export default Index
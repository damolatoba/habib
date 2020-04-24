import axios from 'axios'
    import React, { Component } from 'react'
    import Footer from './Footer'
    import logoimage from '../../../public/images/Logo.png'
    import { Link } from 'react-router-dom'

    class Branchs extends Component {
      constructor (props) {
        super(props)
        this.state = {
          branches: []
        }
        // console.log(branches);
      }

      componentDidMount () {
        axios.get('/api/branches').then(response => {
          this.setState({
            branches: response.data
          })
        })
      }

      selectBranch(id){
        var id = id.id;
        localStorage.setItem('branchInfo', JSON.stringify(id));
        this.props.history.push("/Products") 
        // console.log(branch)
      }

      render () {
        // console.log(this.props.owner);
        const { branches } = this.state
        return (
          <div className="start">
            <Link to="/"><img src={logoimage} className="logoimagebranch"/></Link>
                      {branches.map(branch => (
                        <div key={branch.id} className="brancheslist">
                          <span onClick={() => this.selectBranch({id: branch.id})}>
                          {branch.branch_name}
                          </span>
                        </div>
                      ))}
            <div className="locationList">
              <p className="locationInquiry">IF YOUR LOCATION IS NOT AVAILABLE ON THE LIST ABOVE,</p>
              <p className="locationInquiry">DROP US AN EMAIL - <span className="email">lagos@habibdelivery.com</span></p>
            </div>
                  
            <Footer />
          </div>
          
        )
      }
    }

    export default Branchs
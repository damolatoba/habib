import React, { Component } from 'react'
    import ReactDOM from 'react-dom'
    // import { PersistGate } from 'redux-persist/integration/react'
    // import configureStore from './store'

    import { BrowserRouter, Route, Switch } from 'react-router-dom'
    // import Footer from './Footer'
    import Branches from './Branches'
    import Products from './Products'
    import Cart from './Cart'
    import Index from './Index'
    import Specials from './Specials'
    import Customers from './Customers'
    import Confirm from './Confirm'

    class App extends React.Component {
      render () {
        const isMobile = window.innerWidth <= 500;
        if (isMobile) {
          return (
              <BrowserRouter>
              <div>
                <Switch>
                  <Route exact path='/' component={Index}/>
                  <Route path='/branches' component={Branches}/>
                  <Route path='/products' component={Products} />
                  <Route path='/cart' component={Cart} />
                  <Route path='/specials' component={Specials} />
                  <Route path='/Customers' component={Customers} />
                  <Route path='/Confirm' component={Confirm} />
                </Switch>
                {/* <Footer /> */}
              </div>
            </BrowserRouter>
          )
        }else{
            return (
              <div>
                <h1>This is a mobile only website.</h1>
              </div>
            )
      }
      }
    }

    ReactDOM.render(<App />, document.getElementById('app'))
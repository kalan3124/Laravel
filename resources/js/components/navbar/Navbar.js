import React, { Component } from 'react';

class Navbar extends Component {
    render() {
        return (
            <header id="header">
                <div className="container">
                    <div className="row">
                        <div className="col-sm-6">
                            <ul className="header-top-left">
                                <li className="language dropdown"> <span className="dropdown-toggle" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" role="button"> <img src="assets/images/lanka.png"  alt="img"/> Sri Lanka <span className="caret"></span></span>
                                    <ul className="dropdown-menu" aria-labelledby="dropdownMenu1">
                                        <li><a href="#"><img src="assets/images/lanka.png"  alt="img"/> Sri Lanka</a></li>
                                        <li><a href="#"><img src="assets/images/English-icon.gif" alt="img"/> English</a></li>
                                        <li><a href="#"><img src="assets/images/French-icon.gif" alt="img"/> French</a></li>
                                        <li><a href="#"><img src="assets/images/German-icon.gif" alt="img"/> German</a></li>
                                    </ul>
                                </li>
                                <li className="currency dropdown"> <span className="dropdown-toggle" id="dropdownMenu12" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" role="button"> USD <span className="caret"></span> </span>
                                    <ul className="dropdown-menu" aria-labelledby="dropdownMenu12">
                                        <li><a href="#">USD</a></li>
                                        <li><a href="#">EUR</a></li>
                                        <li><a href="#">AUD</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <div className="col-sm-6">
                            <ul className="header-top-right text-right">
                                <li className="account"><a href="login.html">My Account</a></li>
                                <li className="sitemap"><a href="#">Sitemap</a></li>
                                <li className="cart"><a href="cart_page.html">My Cart</a></li>
                                <li className="cart"><a href="/login">Login</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </header>
        );
    }
}

export default Navbar;
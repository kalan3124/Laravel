import React, { Component } from 'react';
import fblogo from '../images/fblogin.png';
import google from '../images/google.png';
import axios from 'axios'
import { Link } from 'react-router-dom';
import LoadingScreen from 'react-loading-screen'

class Login extends Component {

    constructor(props) {
        super(props);
        this.state = {
            email:'',
            password:'',
            errors: {
                email:'',
                password:'',
                check:''
            }
        };

        this.handleEmailChange = this.handleEmailChange.bind(this);
        this.handlePasswordChange = this.handlePasswordChange.bind(this);
        this.handleSubmit = this.handleSubmit.bind(this);
    }

    handleEmailChange(event){
        this.setState({
            email:event.target.value
        });
    }

    handlePasswordChange(event){
        this.setState({
            password:event.target.value
        });
    }

    handleSubmit(event) {
        event.preventDefault();

        const { history } = this.props
        let errors = {};
        const details = {
            email: this.state.email,
            password: this.state.password
        }

        if (!details.email){
            errors.email = "Email field is requerd";
        } else {
            let lastAtPos = details.email.lastIndexOf('@');
            let lastDotPos = details.email.lastIndexOf('.');

            if (!(lastAtPos < lastDotPos && lastAtPos > 0 && details.email.indexOf('@@') == -1 && lastDotPos > 2 && (details.email.length - lastDotPos) > 2)) {
                errors.email = "Email is not valid";
            }
        }
        if (!details.password){
            errors.password = "Password field is requerd";
        }

        axios.post('/api/login',details)
        .then(function (response) {
            history.push('/user_register');
            console.log(response);
        })
        .catch(function (error) {
            errors.check = "Please Check Email and Password";
        });

        this.setState({errors: errors});
    }

    render() {
        return (
            <div className="wrapper">
                {/*<LoadingScreen*/}
                    {/*loading={true}*/}
                    {/*bgColor='#f1f1f1'*/}
                    {/*spinnerColor='#9ee5f8'*/}
                    {/*textColor='#676767'*/}
                {/*>*/}
                {/*</LoadingScreen>*/}
                <div className="container">
                    <div className="row ">
                        <div className="col-sm-8 col-md-8 col-lg-9 mtb_30">
                            <div className="container">
                                <div className="row">
                                    <div className="col-md-6 col-md-offset-3">
                                        <div className="panel-login">
                                            <div className="panel-heading">
                                                <div className="heading-part mb_20 ">
                                                    <h2 className="main_title">SIGN IN</h2>
                                                </div><br/>
                                            </div>
                                            <div className="panel-body">
                                                <div className="row">
                                                    <div className="col-md-12">
                                                        <form onSubmit={this.handleSubmit}>
                                                            <span style={{color: "red"}}>{this.state.errors.check}</span>
                                                            <div className="form-group">
                                                                <input type="text" name="email" id="email" tabIndex="1" className="form-control" placeholder="Username" value={this.state.value} onChange={this.handleEmailChange}/>
                                                            </div>
                                                            <span style={{color: "red"}}>{this.state.errors.email}</span>
                                                            <div className="form-group">
                                                                <input type="password" name="password" id="password" tabIndex="2" className="form-control" placeholder="Password" value={this.state.value} onChange={this.handlePasswordChange}/>
                                                            </div>
                                                            <span style={{color: "red"}}>{this.state.errors.password}</span>
                                                            <div className="form-group text-center">
                                                                <input type="checkBox" tabIndex="3" className="" name="remember" id="remember"/>
                                                                <label htmlFor="remember"> Remember Me</label>
                                                            </div>
                                                            <div className="form-group">
                                                                <div className="row">
                                                                    <div className="col-sm-6 col-sm-offset-3">
                                                                        <input type="submit" name="login-submit" id="login-submit" tabIndex="4" className="form-control btn btn-login" value="Log In"/>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </form>
                                                        <div className="form-group">
                                                            <div className="row">
                                                                <div className="col-lg-12">
                                                                    <div className="text-center">
                                                                        <a href="#" tabIndex="5" className="forgot-password">Forgot Password?</a>
                                                                    </div>
                                                                </div>
                                                            </div><br/><hr/>
                                                        </div>
                                                        {/*<div className="row">*/}
                                                            {/*<div classNameName="col-md-1">*/}

                                                            {/*</div>*/}
                                                            {/*<div className="col-md-5">*/}
                                                                {/*<a href="">*/}
                                                                    {/*<img src={fblogo} alt=""/>*/}
                                                                {/*</a>*/}
                                                            {/*</div>*/}
                                                            {/*<div className="col-md-5">*/}
                                                                {/*<Link to={'/user_register'}>*/}
                                                                    {/*<img src={google} alt=""/>*/}
                                                                {/*</Link>*/}
                                                            {/*</div>*/}
                                                        {/*</div>*/}
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        );
    }
}

export default Login;
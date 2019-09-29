import React, { Component } from 'react';
import axios from 'axios'

class UserRegister extends Component {

    constructor(props) {
        super(props);
        this.state = {
            first_name: '',
            last_name:'',
            email:'',
            password:'',
            C_passwordL:'',
            errors: []
         };

        this.handleFirstNameChange = this.handleFirstNameChange.bind(this);
        this.handleLastNameChange = this.handleLastNameChange.bind(this);
        this.handleEmailChange = this.handleEmailChange.bind(this);
        this.handlePasswordChange = this.handlePasswordChange.bind(this);
        this.handleCPasswordChange = this.handleCPasswordChange.bind(this);
        this.handleSubmit = this.handleSubmit.bind(this);
    }

    handleFirstNameChange(event) {
        this.setState({
            first_name: event.target.value
        });
    }

    handleLastNameChange(event){
        this.setState({
            last_name:event.target.value
        });
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

    handleCPasswordChange(event){
        this.setState({
            C_password:event.target.value
        });
    }

    handleSubmit(event) {
        event.preventDefault();

        alert('ok');
        const details = {
            first_name: this.state.first_name,
            last_name: this.state.last_name,
            email: this.state.email,
            password: this.state.password
        }

        if (this.state.first_name == ""){
            errors["First Name is Required"];
        } else {
            alert('ok');
        }

        axios.post('/api/user-register',details)
        .then(function (response) {
            // history.push('/');
            console.log(response);
        })
        .catch(function (error) {
            console.log(error);
        });
    }

    render() {
        return (
            <div className="wrapper">
                <div className="container">
                    <div className="row ">
                        <div className="col-sm-8 col-md-8 col-lg-9 mtb_30">
                            <div className="container">
                                <div className="row">
                                    <div className="col-md-6 col-md-offset-3">
                                        <div className="panel-login">
                                            <div className="panel-heading">
                                                <div className="heading-part mb_20 ">
                                                    <h2 className="main_title">USER SIGN UP</h2>
                                                </div><br/>
                                                <hr/>
                                            </div>
                                            <div className="panel-body">
                                                <div className="row">
                                                    <div className="col-lg-12">
                                                        <form onSubmit={this.handleSubmit}>
                                                            <div className="form-group">
                                                                <input type="text" name="first_name" id="first_name" tabIndex="1" className="form-control" placeholder="First Name" value={this.state.value} onChange={this.handleFirstNameChange}/>
                                                                <span></span>
                                                            </div>
                                                            <div className="form-group">
                                                                <input type="text" name="last_name" id="last_name" tabIndex="1" className="form-control" placeholder="Last Name" value={this.state.value} onChange={this.handleLastNameChange}/>
                                                            </div>
                                                            <div className="form-group">
                                                                <input type="email" name="email" id="email" tabIndex="1" className="form-control" placeholder="Email Address" value={this.state.value} onChange={this.handleEmailChange}/>
                                                            </div>
                                                            <div className="form-group">
                                                                <input type="password" name="password" id="password2" tabIndex="2" className="form-control" placeholder="Password" value={this.state.value} onChange={this.handlePasswordChange}/>
                                                            </div>
                                                            <div className="form-group">
                                                                <input type="password" name="confirm-password" id="confirm-password" tabIndex="2" className="form-control" placeholder="Confirm Password" value={this.state.value} onChange={this.handleCPasswordChange}/>
                                                            </div>
                                                            <div className="form-group">
                                                                <div className="row">
                                                                    <div className="col-sm-6 col-sm-offset-3">
                                                                        <input type="submit" name="register-submit" id="register-submit" tabIndex="4" className="form-control btn btn-register" value="Register Now"/>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </form>
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

export default UserRegister;
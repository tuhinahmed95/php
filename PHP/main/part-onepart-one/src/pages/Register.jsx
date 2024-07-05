import React from "react";
import { Link } from "react-router-dom";
const Register = () => {
  return (
    <div className="container">
        <div className="row"> 
        <div className="col-3"></div>
            <div className="col-6"> 
            <div className="register-box">
            <div className="register-logo">
            <a href="../../index2.html">
                <b>Admin</b>LTE
            </a>
            </div>
            <div className="card">
            <div className="card-body register-card-body">
                <p className="login-box-msg">Register a new membership</p>
                <form action="#" method="post">
                <div className="input-group mb-3">
                    <input
                    type="text"
                    className="form-control"
                    placeholder="Full name"
                    />
                    <div className="input-group-append">
                    <div className="input-group-text">
                        <span className="fas fa-user" />
                    </div>
                    </div>
                </div>
                <div className="input-group mb-3">
                    <input
                    type="email"
                    className="form-control"
                    placeholder="Email"
                    />
                    <div className="input-group-append">
                    <div className="input-group-text">
                        <span className="fas fa-envelope" />
                    </div>
                    </div>
                </div>
                <div className="input-group mb-3">
                    <input
                    type="password"
                    className="form-control"
                    placeholder="Password"
                    />
                    <div className="input-group-append">
                    <div className="input-group-text">
                        <span className="fas fa-lock" />
                    </div>
                    </div>
                </div>
                <div className="input-group mb-3">
                    <input
                    type="password"
                    className="form-control"
                    placeholder="Retype password"
                    />
                    <div className="input-group-append">
                    <div className="input-group-text">
                        <span className="fas fa-lock" />
                    </div>
                    </div>
                </div>
                <div className="row">
                    <div className="col-8">
                    <div className="icheck-primary">
                        <input
                        type="checkbox"
                        id="agreeTerms"
                        name="terms"
                        defaultValue="agree"
                        />
                        <label htmlFor="agreeTerms">
                        I agree to the <a href="#">terms</a>
                        </label>
                    </div>
                    </div>
                
                    <div className="col-4">
                    <button className="btn btn-primary btn-block">
                        <Link to="/login">Register</Link>
                        
                    </button>
                    </div>
                
                </div>
                </form>
                <div className="social-auth-links text-center">
                <p>- OR -</p>
                <a href="#" className="btn btn-block btn-primary">
                    <i className="fab fa-facebook mr-2" />
                    Sign up using Facebook
                </a>
                <a href="#" className="btn btn-block btn-danger">
                    <i className="fab fa-google-plus mr-2" />
                    Sign up using Google+
                </a>
                </div>
                <Link to="/login" className="text-center">
                I already have a membership
                </Link>
            </div>
            </div>
        </div>
            </div>
        <div className="col-3"></div>
      </div>
    </div>
  );
};

export default Register;

import React, { Component } from 'react';

class Salemobile extends Component {
    render() {
        return (
            <div className="container"><br/><br/>
                <div class="row">
                    <div>
                        <div class="heading-part mb_20 ">
                            <h2 class="main_title">Sell Mobile Phone</h2>
                        </div><br/>
                    </div>
                </div>
                <div class="row">
                    <div className="col-md-4">
                        <label>Mobile Brand</label>
                        <select class="form-control">
                            <option disabled selected value="null">Select</option>
                            <option value="+47">Samsung</option>
                            <option value="+46">Nokia</option>
                            <option value="+45">Apple</option>
                        </select>
                    </div>
                    <div className="col-md-4">
                        <label>Mobile Model</label>
                        <select class="form-control">
                            <option disabled selected value="null">Select</option>
                            <option value="+47">-----</option>
                            <option value="+46">-----</option>
                            <option value="+45">-----</option>
                        </select>
                    </div>
                </div><br/><br/>
                <div className="row">
                    <div className="col-md-4">
                        <label>Edition</label>
                        <input type="text" name="condition" id="condition"  class="form-control" />
                    </div>
                    <div className="col-md-4">
                        <label>Description</label>
                        <textarea class="form-control"></textarea>
                    </div>
                </div><br/><br/>
                <div className="row">
                    <div className="col-md-4">
                        <label>Price</label>
                        <input type="text" name="price" id="price"  class="form-control" />
                    </div>
                    <div className="col-md-4">
                        <label>Phone No</label>
                        <input type="text" name="phone" id="phone"  class="form-control" />
                    </div>
                </div><br/><br/>
                <input type="submit" className="btn btn-danger" value="Post Ad"/><br/>
            </div>
        );
    }
}

export default Salemobile;
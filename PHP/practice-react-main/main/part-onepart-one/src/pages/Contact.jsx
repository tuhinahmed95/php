import React from 'react';

const Contact = () => {
    return (
        <div className='container' style={{backgroundColor:"gray"}}>
            <div className="row">
                <div className="col-2"></div> 
                <div className="col-8"> 
                <form style={{backgroundColor:"light"}}>
                    <div className="form-group">
                        <label to="exampleFormControlInput1">Email address</label>
                        <input type="email" className="form-control" id="exampleFormControlInput1" placeholder="name@example.com"/>
                    </div>
                    <div className="form-group">
                        <label to="exampleFormControlSelect1">Example select</label>
                        <select className="form-control" id="exampleFormControlSelect1">
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                        <option>5</option>
                        </select>
                    </div>
                    <div className="form-group">
                        <label to="exampleFormControlSelect2">Example multiple select</label>
                        <select multiple className="form-control" id="exampleFormControlSelect2">
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                        <option>5</option>
                        </select>
                    </div>
                    <div className="form-group">
                        <label to="exampleFormControlTextarea1">Example textarea</label>
                        <textarea className="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                    </div>
                    <div> 
                        <br />
                    <button type="button" className="btn btn-primary">Save</button>
                    </div>
                </form>
                
                </div> 
                <div className="col-2"></div> 
            
            </div>
        </div>
    );
};

export default Contact;
import React from 'react';

const AddCategory = () => {
    return (
        <div className='container'>
          <h1>Hi</h1>
              <div className="card-body">
  <form>
    <div className="row">
      <div className="col-sm-6">
        {/* text input */}
        <div className="form-group">
          <label>Text</label>
          <input type="text" className="form-control" placeholder="Enter ..." />
        </div>
      </div>
      <div className="col-sm-6">
        <div className="form-group">
          <label>Text Disabled</label>
          <input type="text" className="form-control" placeholder="Enter ..." disabled />
        </div>
      </div>
    </div>
    <div className="row">
      <div className="col-sm-6">
        {/* textarea */}
        <div className="form-group">
          <label>Textarea</label>
          <textarea className="form-control" rows={3} placeholder="Enter ..." defaultValue={""} />
        </div>
      </div>
      <div className="col-sm-6">
        <div className="form-group">
          <label>Textarea Disabled</label>
          <textarea className="form-control" rows={3} placeholder="Enter ..." disabled defaultValue={""} />
        </div>
      </div>
    </div>
    {/* input states */}
    <div className="form-group">
      <label className="col-form-label" htmlFor="inputSuccess"><i className="fas fa-check" /> Input with
        success</label>
      <input type="text" className="form-control is-valid" id="inputSuccess" placeholder="Enter ..." />
    </div>
    <div className="form-group">
      <label className="col-form-label" htmlFor="inputWarning"><i className="far fa-bell" /> Input with
        warning</label>
      <input type="text" className="form-control is-warning" id="inputWarning" placeholder="Enter ..." />
    </div>
    <div className="form-group">
      <label className="col-form-label" htmlFor="inputError"><i className="far fa-times-circle" /> Input with
        error</label>
      <input type="text" className="form-control is-invalid" id="inputError" placeholder="Enter ..." />
    </div>
    <div className="row">
      <div className="col-sm-6">
        {/* checkbox */}
        <div className="form-group">
          <div className="form-check">
            <input className="form-check-input" type="checkbox" />
            <label className="form-check-label">Checkbox</label>
          </div>
          <div className="form-check">
            <input className="form-check-input" type="checkbox" defaultChecked />
            <label className="form-check-label">Checkbox checked</label>
          </div>
          <div className="form-check">
            <input className="form-check-input" type="checkbox" disabled />
            <label className="form-check-label">Checkbox disabled</label>
          </div>
        </div>
      </div>
      <div className="col-sm-6">
        {/* radio */}
        <div className="form-group">
          <div className="form-check">
            <input className="form-check-input" type="radio" name="radio1" />
            <label className="form-check-label">Radio</label>
          </div>
          <div className="form-check">
            <input className="form-check-input" type="radio" name="radio1" defaultChecked />
            <label className="form-check-label">Radio checked</label>
          </div>
          <div className="form-check">
            <input className="form-check-input" type="radio" disabled />
            <label className="form-check-label">Radio disabled</label>
          </div>
        </div>
      </div>
    </div>
    <div className="row">
      <div className="col-sm-6">
        {/* select */}
        <div className="form-group">
          <label>Select</label>
          <select className="form-control">
            <option>option 1</option>
            <option>option 2</option>
            <option>option 3</option>
            <option>option 4</option>
            <option>option 5</option>
          </select>
        </div>
      </div>
      <div className="col-sm-6">
        <div className="form-group">
          <label>Select Disabled</label>
          <select className="form-control" disabled>
            <option>option 1</option>
            <option>option 2</option>
            <option>option 3</option>
            <option>option 4</option>
            <option>option 5</option>
          </select>
        </div>
      </div>
    </div>
    <div className="row">
      <div className="col-sm-6">
        {/* Select multiple*/}
        <div className="form-group">
          <label>Select Multiple</label>
          <select multiple className="form-control">
            <option>option 1</option>
            <option>option 2</option>
            <option>option 3</option>
            <option>option 4</option>
            <option>option 5</option>
          </select>
        </div>
      </div>
      <div className="col-sm-6">
        <div className="form-group">
          <label>Select Multiple Disabled</label>
          <select multiple className="form-control" disabled>
            <option>option 1</option>
            <option>option 2</option>
            <option>option 3</option>
            <option>option 4</option>
            <option>option 5</option>
          </select>
        </div>
      </div>
    </div>
  </form>
</div>
  
        </div>
    );
};

export default AddCategory;
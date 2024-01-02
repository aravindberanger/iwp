import React, { useState, useEffect } from "react";
import { doc, updateDoc, getDoc } from "firebase/firestore";
import { db } from "../firebase";

const AddOrEditProduct = (props) => {
  const initialFieldValues = {
    Address: "",
    City: "",
    Country: "",
    Mobile: "",
    mop: "",
  };

  var [values, setValues] = useState(initialFieldValues);
  var [id, setId] = useState("");

  const handleInputChange = (e) => {
    var { name, value } = e.target;
    setValues({
      ...values,
      [name]: value,
    });
  };

  const handleFormSubmit = (e) => {
    e.preventDefault();
    props.addOrEdit(values);
  };
  const getData = async () => {
    const taskDocRef = doc(db, "Beranger", props.currentId);
    const docSnap = await getDoc(taskDocRef);
    console.log(docSnap.data(), ";docSnap");
    setValues(docSnap.data().obj);
  };

  if (props.currentId !== id) {
    setId(props.currentId);
    getData();
  }

  return (
    <form autoComplete="off" onSubmit={handleFormSubmit}>


      
      <div className="col-12 col-md-12">
        <div className="card">
          <div className="card-header">
            <input
              value={
                props.currentId === ""
                  ? "Add Product Info"
                  : "Update Product Info"
              }
            />
          </div>
          <div className="card-body">
            <div className="center-form">
              <div className="row">
                <div className="col-12 col-md-6">
                  <div className="form-group">
                    <label className="col-form-label">
                      Address<span className="mandatoryFieldColor">*</span>
                    </label>
                    <input
                      value={values.Address}
                      onChange={handleInputChange}
                      type="text"
                      className="form-control"
                      name="Address"
                    />
                  </div>
                </div>
                <div className="col-12 col-md-6">
                  <div className="form-group">
                    <label className="col-form-label">
                      City<span className="mandatoryFieldColor">*</span>
                    </label>
                    <input
                      value={values.City}
                      onChange={handleInputChange}
                      type="text"
                      className="form-control"
                      name="City"
                    />
                  </div>
                </div>
                <div className="col-12 col-md-6">
                  <div className="form-group">
                    <label className="col-form-label">
                      Country<span className="mandatoryFieldColor">*</span>
                    </label>
                    <div>
          <label>
            <input
              type="radio"
              value="USA"
              checked={values.Country === 'USA'}
              onChange={handleInputChange}
              name="Country"
            />
            USA
          </label>
        </div>
        <div>
          <label>
            <input
              type="radio"
              value="UK"
              checked={values.Country === 'UK'}
              onChange={handleInputChange}
              name="Country"
            />
            UK
          </label>
        </div>
        <div>
          <label>
            <input
              type="radio"
              value="Canada"
              checked={values.Country === 'Canada'}
              onChange={handleInputChange}
              name="Country"
            />
            Canada
          </label>
        </div>
        {/* Add more radio button options for other countries */}
                  </div>
                </div>
              
                
                <div className="col-12 col-md-6">
                  <div className="form-group">
                    <label className="col-form-label">
                      Mobile<span className="mandatoryFieldColor">*</span>
                    </label>
                    <input
                      value={values.Mobile}
                      onChange={handleInputChange}
                      type="text"
                      className="form-control"
                      name="Mobile"
                    />
                  </div>
                </div>



                <div className="col-12 col-md-6">
                  <div className="form-group">
                    <label className="col-form-label">
                      Mode Of Payment<span className="mandatoryFieldColor">*</span>
                    </label>
                    <select
          value={values.mop}
          onChange={handleInputChange}
          className="form-control"
          name="mop"
        >
          <option value="">Select Mode Of Payment</option>
          <option value="Credit Card">Credit Card</option>
          <option value="Debit Card">Debit Card</option>
          <option value="Cash">Cash</option>
          
        </select>
                  </div>
                </div>


                
                <div className="col-12 col-md-12">
                  <div className="btn-group mb-3 mt-2 cmn-btn-grp">
                    <input
                      type="submit"
                      value={props.currentId === "" ? "Save" : "Update"}
                      className="btn btn-success btn-block"
                    />
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </form>
  );
};

export default AddOrEditProduct;

import React from 'react';

const ContentHeader = () => {
    return (
        <div>
  {/* Content Header (Page header) */}
<section className="content-header">
  <div className="container-fluid">
    <div className="row mb-2">
      <div className="col-sm-6">
        <h1>Blank Page</h1>
      </div>
      <div className="col-sm-6">
        <ol className="breadcrumb float-sm-right">
          <li className="breadcrumb-item"><a href="#">Home</a></li>
          <li className="breadcrumb-item active">Blank Page</li>
        </ol>
      </div>
    </div>
  </div>{/* /.container-fluid */}
</section>

        </div>
    );
};

export default ContentHeader;
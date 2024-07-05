import React from 'react';
import { NavLink } from 'react-router-dom';
const Sidebar = () => {
    return (
        <aside className="main-sidebar sidebar-dark-primary elevation-4">
        {/* Brand Logo */}
        <NavLink to="/" className="brand-link">
            <img src="assets/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" className="brand-image img-circle elevation-3" style={{opacity: '.8'}} />
            <span className="brand-text font-weight-light">AdminLTE 3</span>
        </NavLink>
        {/* Sidebar */}
        <div className="sidebar">
            {/* Sidebar user (optional) */}
            <div className="user-panel mt-3 pb-3 mb-3 d-flex">
            <div className="image">
                <img src="assets/dist/img/user2-160x160.jpg" className="img-circle elevation-2" alt="User Image" />
            </div>
            <div className="info">
                <NavLink to="/" className="d-block">E-Commerce</NavLink>
            </div>
            </div>
            {/* SidebarSearch Form */}
            <div className="form-inline">
            <div className="input-group" data-widget="sidebar-search">
                <input className="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search" />
                <div className="input-group-append">
                <button className="btn btn-sidebar">
                    <i className="fas fa-search fa-fw" />
                </button>
                </div>
            </div>
            </div>
            {/* Sidebar Menu */}
            <nav className="mt-2">
            <ul className="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                {/* Add icons to the links using the .nav-icon class
                with font-awesome or any other icon font library */}
                <li className="nav-item">
                <a href="#" className="nav-link">
                    <i className="nav-icon fas fa-tachometer-alt" />
                    <p>
                    Dashboard
                    <i className="right fas fa-angle-left" />
                    </p>
                </a>
                <ul className="nav nav-treeview">
                    <li className="nav-item">
                    <a href="../../index.html" className="nav-link">
                        <i className="far fa-circle nav-icon" />
                        <p>Dashboard v1</p>
                    </a>
                    </li>
                    <li className="nav-item">
                    <a href="../../index2.html" className="nav-link">
                        <i className="far fa-circle nav-icon" />
                        <p>Dashboard v2</p>
                    </a>
                    </li>
                </ul>
                </li>
                <li className="nav-item">
                <a href="../gallery.html" className="nav-link">
                    <i className="nav-icon far fa-image" />
                    <p>
                    Gallery
                    </p>
                </a>
                </li>
            
                <li className="nav-item">
                <a href="#" className="nav-link">
                    <i className="nav-icon fas fa-user" />
                    <p>
                    Users
                    <i className="fas fa-angle-left right" />
                    </p>
                </a>
                <ul className="nav nav-treeview">
                    <li className="nav-item">
                    <NavLink to="/add-user" className="nav-link">
                        <i className="far fa-circle nav-icon" />
                        <p>Add-User</p>
                    </NavLink>
                    </li>
                    <li className="nav-item">
                    <NavLink to="/manage-user" className="nav-link">
                        <i className="far fa-circle nav-icon" />
                        <p>Manage User</p>
                    </NavLink>
                    </li>
                </ul>
                </li>
                <li className="nav-item">
                <a href="#" className="nav-link">
                    <i className="nav-icon fas fa-user" />
                    <p>
                   Category
                    <i className="fas fa-angle-left right" />
                    </p>
                </a>
                <ul className="nav nav-treeview">
                    <li className="nav-item">
                    <NavLink to="/add-category" className="nav-link">
                        <i className="far fa-circle nav-icon" />
                        <p>Add-Category</p>
                    </NavLink>
                    </li>
                    <li className="nav-item">
                    <NavLink to="/manage-user" className="nav-link">
                        <i className="far fa-circle nav-icon" />
                        <p>Manage User</p>
                    </NavLink>
                    </li>
                </ul>
                </li>

                <li className="nav-header">MISCELLANEOUS</li>
                <li className="nav-item">
                <a href="../../iframe.html" className="nav-link">
                    <i className="nav-icon fas fa-ellipsis-h" />
                    <p>Tabbed IFrame Plugin</p>
                </a>
                </li>
            </ul>
            </nav>
            {/* /.sidebar-menu */}
        </div>
        {/* /.sidebar */}
        </aside>
    );
};

export default Sidebar;
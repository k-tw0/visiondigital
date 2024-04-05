import React from "react";
import ReactDOM from "react-dom";

function Example() {
    return (
        <div className="container">
            <div className="row justify-content-center">
                <div className="col-md-8">
                    <div className="card">
                        <div className="card-header">Example Component</div>

                        <div className="card-body">I'm an example componen</div>
                        <li>asd</li>
                        <ul>
                            <li>
                                {/* Link to a specific route using path */}
                                <Link to="/about" className="button is-primary">
                                    About Us
                                </Link>
                            </li>
                            <li>
                                {/* Link to an external URL */}
                                <a
                                    href="https://www.example.com"
                                    target="_blank"
                                    rel="noreferrer noopener"
                                >
                                    External Link (opens in new tab)
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    );
}

export default Example;

if (document.getElementById("componente")) {
    ReactDOM.render(<Example />, document.getElementById("componente"));
}

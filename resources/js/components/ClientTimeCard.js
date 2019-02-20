import React, {Component} from 'react';
import ReactDOM from "react-dom";

export default class ClientTimeCard extends Component {
    constructor(props) {
        super(props);

        this.state = {
            time: new Date().toLocaleTimeString()
        };

        this.tick = this.tick.bind(this);
    }

    tick() {
        this.setState({
            time: new Date().toLocaleTimeString()
        });
    }

    componentDidMount() {
        this.timer = setInterval(this.tick, 1000);
    }

    componentWillUnmount() {
        clearInterval(this.timer);
    }

    render() {
        return (
            <div className="card border-left-success shadow h-100 py-2">
                <div className="card-body">
                    <div className="row no-gutters align-items-center">
                        <div className="col mr-2">
                            <div className="text-xs font-weight-bold text-success text-uppercase mb-1">
                                Current Time
                            </div>
                            <div className="h5 mb-0 font-weight-bold text-gray-800">
                                {this.state.time}
                            </div>
                        </div>
                        <div className="col-auto">
                            <i className="fas fa-clock fa-2x text-gray-300"/>
                        </div>
                    </div>
                </div>
            </div>
        );
    }
}

if (document.getElementById('client-time-card')) {
    ReactDOM.render(<ClientTimeCard/>, document.getElementById('client-time-card'));
}

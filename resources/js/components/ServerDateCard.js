import React, {Component} from 'react';
import ReactDOM from 'react-dom';
import axios from 'axios';

export default class ServerDateCard extends Component {
    constructor(props) {
        super(props);

        this.state = {serverDate: new Date()};
    }

    componentDidMount() {
        axios.get('/api/server/date')
            .then(response => {
                this.setState({
                    serverDate: new Date(response.data.data.server.date)
                })
            })
    }

    render() {
        return (
            <div className="card border-left-primary shadow h-100 py-2">
                <div className="card-body">
                    <div className="row no-gutters align-items-center">
                        <div className="col mr-2">
                            <div className="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                Server Date
                            </div>
                            <div className="h5 mb-0 font-weight-bold text-gray-800">
                                {this.state.serverDate.toLocaleDateString()}
                            </div>
                        </div>
                        <div className="col-auto">
                            <i className="fas fa-calendar fa-2x text-gray-300"/>
                        </div>
                    </div>
                </div>
            </div>
        );
    }
}

if (document.getElementById('server-date-card')) {
    ReactDOM.render(<ServerDateCard/>, document.getElementById('server-date-card'));
}

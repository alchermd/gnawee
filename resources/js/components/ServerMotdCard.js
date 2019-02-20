import React, {Component} from 'react';
import ReactDOM from 'react-dom';
import axios from 'axios';

export default class ServerMotdCard extends Component {
    constructor(props) {
        super(props);

        this.state = {
            motdPreview: '',
            motd: ''
        }
    }

    componentDidMount() {
        axios.get('/api/server/motd')
            .then(response => {
                this.setState({
                    motd: response.data.data.server.motd,
                    motdPreview: response.data.data.server.motd.substring(0, 14) + '...'
                });
            })
    }

    render() {
        return (
            <div className="card border-left-info shadow h-100 py-2"
                 data-toggle="tooltip" data-placement="bottom" title={this.state.motd}>
                <div className="card-body">
                    <div className="row no-gutters align-items-center">
                        <div className="col mr-2">
                            <div className="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                Message of the Day
                            </div>
                            <div className="text-sm mb-0 font-weight-bold text-gray-800">
                                {this.state.motdPreview}
                            </div>
                        </div>
                        <div className="col-auto">
                            <i className="fas fa-chalkboard fa-2x text-gray-300"/>
                        </div>
                    </div>
                </div>
            </div>
        );
    }
}

if (document.getElementById('server-motd-card')) {
    ReactDOM.render(<ServerMotdCard/>, document.getElementById('server-motd-card'));
}

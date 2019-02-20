import React, {Component} from 'react';
import ReactDOM from 'react-dom';
import axios from 'axios';

export default class VisitorCounterCard extends Component {
    constructor(props) {
        super(props);

        this.state = {
            visits: 0
        };
    }

    componentDidMount() {
        axios.get('/api/visits')
            .then(response => {
                this.setState({
                    visits: response.data.data.visits
                });
            });
    }

    render() {
        return (
            <div className="card border-left-warning shadow h-100 py-2">
                <div className="card-body">
                    <div className="row no-gutters align-items-center">
                        <div className="col mr-2">
                            <div className="text-xs font-weight-bold text-warning text-uppercase mb-1">
                                Visitor Counter
                            </div>
                            <div className="h5 mb-0 font-weight-bold text-gray-800">{this.state.visits}</div>
                        </div>
                        <div className="col-auto">
                            <i className="fas fa-users fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>)
    }
}

if (document.getElementById('visitor-counter-card')) {
    ReactDOM.render(<VisitorCounterCard/>, document.getElementById('visitor-counter-card'));
}

# EVTech Crowdsale Ethereum smartcontract

This is the code for the Ethereum smartcontract responsible for EVT crowdsale.

## Tests

To run tests, first install mocha and Ethereum test dependencies:

    npm install

Then, launch a testrpc client:

    node_modules/.bin/testrpc --port 12345

Then, run the test framework:

    node_modules/.bin/mocha test

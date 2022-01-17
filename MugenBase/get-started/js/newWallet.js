const elliptic = require(['elliptic/elliptic-types.ts'])
var EC = elliptic.ec;
var ec = new EC('secp256k1');

const key = ec.genKeyPair();
const publicKey = key.getPublic('hex');
const privateKey = key.getPrivate('hex');

console.log('Public key:', publicKey);
console.log('Private key:', privateKey);
import firebase from 'firebase';

const settings = {timestampsInSnapshots: true};

const config = {
  apiKey: "AIzaSyAwsoeWx0Ve9HwgJ6pSM2Mg5BewtwnPv0E",
  databaseURL: "https://paiwise-default-rtdb.europe-west1.firebasedatabase.app",
  projectId: "paiwise"
};
firebase.initializeApp(config);

firebase.firestore().settings(settings);

export default firebase;

import React from "react";
import {Text, View, Button} from "react-native"
import { NavigationContainer } from '@react-navigation/native';
import { createNativeStackNavigator } from '@react-navigation/native-stack';


const Home = ({ navigation }) =>{
    return(
        <>
        <View style= {{ justifyContent: 'center',flex: 1,alignItems:"center"}}>
        <Text style = {{fontSize: 40,}}>
            Home Page
        </Text>
        <Button title="Go To About" onPress={()=>navigation.navigate('About')} />
        </View>
        </>
    )
}

export default Home
import React from "react";
import {Button, Text, View} from "react-native"



const About = ({navigation}) =>{
    return(
        <>
        
        <View style= {{ justifyContent: 'center',flex: 1,alignItems:"center"}}>
        <Text style = {{fontSize: 40,}}>
            About
        </Text>
        <Button title="Go To Home" onPress={()=>{
            navigation.navigate('Home')
        }}/>
        <Button title="Go To Example" onPress={()=>{
            navigation.navigate('Example')
        }}/>
        </View>

        
        
        </>
    )
}

export default About
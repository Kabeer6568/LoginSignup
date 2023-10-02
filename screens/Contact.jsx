import React from "react";
import {Text, View, Button} from "react-native"




const Contact = ({navigation}) =>{
    return(
        <>
        
        <View style= {{ justifyContent: 'center',flex: 1,alignItems:"center"}}>
        <Text style = {{fontSize: 40,}}>
            Contatc Us
        </Text>
        
        {/* <Button title="Go To Home" onPress={()=>{
            navigation.navigate('Home')
        }}/>
        <Button title="Go To About" onPress={()=>{
            navigation.navigate('About')
        }}/> */}
        </View>
        
        </>
    )
}

export default Contact